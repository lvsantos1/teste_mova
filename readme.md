# Teste hands-on MOVA
###### Pattern: Strategy
###### Para testar o código, utilize:
####

    export IMAGE_NAME=teste2 TARGET_PORT=86 && \
    docker build . -t ${IMAGE_NAME} && \
    docker run -p ${TARGET_PORT}:8080 ${IMAGE_NAME}