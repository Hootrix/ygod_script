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
docker-compose up -d


# 启动
docker-compose restart

# 停止
docker-compose stop

# 重启
restart
```

## 设置参数

config.php
```
'/test/dashaozhu' => 'http://mock-api.com/VnZ8Eqzw.mock/boluo',
```