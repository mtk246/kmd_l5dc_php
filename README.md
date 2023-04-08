# kmd_l5dc_php

docker container set up on

- container_name: nimmis/apache-php7
- php: ^7
- port - 8085:80 << can be customized with `<your_desired_available_port_num>:80`

- clone repo using this link - https://github.com/mtk246/kmd_l5dc_php.git
- cd kmd_l5dc_php
- `docker-compose up -d` with detached mode,
- or `docker-compose up` with attached mode

after pulling necessary images, check container is running by `docker ps | grep kmd_l5dc_php`

if it's showing `Up <num> seconds`, then it is sure that container is running properly.

<img width="952" alt="Screen Shot 2023-04-08 at 11 17 53" src="https://user-images.githubusercontent.com/54733323/230703658-f16b35f3-c087-4da8-a869-bec01f9b07eb.png">


- after that, open your browser using `http://localhost:<your_container_port>`, for me it's `http://localhost:8085`,
- enter into your desired folder to see website content.
