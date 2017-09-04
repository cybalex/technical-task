#!/bin/bash

container_name=php

help () {
    echo
    echo 'Usage:'
    echo '    sh deploy.sh [argument]'
    echo '    Argument is optional and allows to execute particular tasks.'
    echo '    If no arguments passed - full list of deployment tasks will be run'
    echo '    No extra arguments are allowed'
    echo
    echo '    Available argument values are as follows:'
    echo '      c    - composer install'
    echo '      g    - git pull'
    echo '      gc   - git pull and composer install'
    echo '      t    - run tests'
    echo '      h    - show help'
    echo
    echo 'Usage examples:'
    echo '    sh deploy.sh gc'
    echo
}

git_pull () {
    echo 'start pulling from git repository'
    git stash clear
    git stash
    git -C .. pull -v
    git stash pop
    echo '[x] pull from git repository OK'
    git stash clear
}

composer_install () {
    docker-compose exec $container_name /bin/sh -c "cd /www \
        && composer install \
        && echo '[x] composer install --no-interaction OK'"
}

run_tests () {
    composer_install
    docker-compose exec $container_name /bin/bash -c "/www/vendor/bin/phpunit -c /www/phpunit.xml.dist"
}

countdown () {
    echo 'Starting execution in 5 seconds'
    echo Press Ctrl+C to cancel
    for i in 5 4 3 2 1
        do
           echo $i
           sleep 1
        done
    echo
}

if [ $# = 0 ]; then
    echo Scenario:
    echo '[x] Git pull'
    echo '[x] Composer install'
    echo
    countdown
    git_pull
    composer_install
    exit 0
else
    if [ $# = 1 ]; then
        if [ $1 = g ]; then
            echo Scenario:
            echo '[x] Git pull'
            echo
            countdown
            git_pull
            echo All done!
            exit 0
        fi

        if [ $1 = c ]; then
            echo Scenario:
            echo '[x] Composer install'
            echo
            countdown
            composer_install
            echo All done!
            exit 0
        fi

        if [ $1 = gc ]; then
            echo Scenario:
            echo '[x] Git pull'
            echo '[x] Composer install'
            echo
            countdown
            git_pull
            composer_install
            echo All done!
            exit 0
        fi

        if [ $1 = t ]; then
            echo 'Running phpunit tests...'
            run_tests
        fi

        if [ $1 = h ]; then
            help
            exit 0
        fi

    fi
fi

echo Invalid parameter or extra parameters were passed to the script
echo Please run 'deploy.sh h' from command line interface for help
exit 1
