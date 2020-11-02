# ygod_script
proxy pass  script. 


## 安装docker

ubuntu
```
sudo apt-get install docker docker-compose -y
sudo systemctl start docker #启动docker
sudo systemctl enable docker # 设置开机自启动
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

修改src/config.php 例如
```
'/test/dashaozhu' => 'http://mock-api.com/VnZ8Eqzw.mock/boluo',
```
