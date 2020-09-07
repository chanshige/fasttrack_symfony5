# Install
    docker-compose build --no-cache
    docker-compose run --rm php symfony new . --no-git --version=stable

# Env
    symfony composer req profiler --dev
    symfony composer req debug --dev
    symfony composer req logger
    symfony composer req annotations
    
# Maker
    symfony composer req maker --dev
    symfony console list make
    
# Make controller
    symfony console make:controller ConferenceController