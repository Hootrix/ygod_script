# ygod_script
proxy pass  script. 


## 安装docker

ubuntu
```
sudo apt-get install docker docker-compose -y
sudo systemctl enable docker
```

## 拉取代码

```
cd ~ && git clone https://github.com/Hootrix/ygod_script.git  && cd ygod_script
```

## 运行容器

```
# 首次运行
sudo docker-compose -f ~/ygod_script/docker-compose.yaml up -d


# 启动
sudo  docker-compose -f ~/ygod_script/docker-compose.yaml  start

# 停止
sudo  docker-compose -f ~/ygod_script/docker-compose.yaml stop

# 重启
sudo  docker-compose -f ~/ygod_script/docker-compose.yaml restart
```

## 设置参数

config.php
```
'/test/dashaozhu' => 'http://mock-api.com/VnZ8Eqzw.mock/boluo',
```