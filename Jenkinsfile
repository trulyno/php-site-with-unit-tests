pipeline {
    agent {
        label 'php-agent'
    }
    
    stages {        
        stage('Install Dependencies') {
            steps {
                // Project preparation (install dependencies if needed)
                echo 'Preparing project...'
                sh '''
                if ! command -v composer > /dev/null; then
                    curl -sS https://getcomposer.org/installer | php
                    mv composer.phar /usr/local/bin/composer
                fi
                composer install --no-interaction --prefer-dist
            '''
            }
        }
        
        stage('Test') {
            steps {
                // Running tests
                echo 'Running tests...'
                sh './vendor/bin/phpunit'
            }
        }
    }
    
    post {
        always {
            echo 'Pipeline completed.'
        }
        success {
            echo 'All stages completed successfully!'
        }
        failure {
            echo 'Errors detected in the pipeline.'
        }
    }
}
