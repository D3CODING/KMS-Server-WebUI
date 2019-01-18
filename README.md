# KMS激活服务器及在线生成一键激活脚本

![](https://ws3.sinaimg.cn/large/005BYqpgly1fzayfz9h1hj30j00kqjsx.jpg)
## 安装
**以CentOS系统为例**
1. 下载"kms.tar.gz"到服务器并解压

```
wget https://github.com/lichenzero/kms_server_webui/raw/master/kms.tar.gz
tar xzf kms.tar.gz
```

2. 查看服务器CPU架构

```
cat /proc/cpuinfo
```

![](https://img04.sogoucdn.com/app/a/100520146/c7d577f787241c436f8a8e534b4b4524)

3. 进入对应目录，运行激活服务器
- 注意：需要根据CPU架构选择对应二进制文件，这里使用的是"vlmcsd-x64-musl-static"
```
cd binaries/Linux/intel/static
./vlmcsd-x64-musl-static
```

- 如开启firewalld需要开放1688(TCP)端口

```
firewall-cmd --zone=public --add-port=80/tcp --permanent #添加
firewall-cmd --reload   #重载生效
```
## 关闭

1. 查看PID

```
ps -ef | grep vlmcsd-x64-musl-static    #请替换对应文件名
```

![](https://img02.sogoucdn.com/app/a/100520146/218e7079fdd39efb633f83c482898f8a)

2. 关闭

```
#19605替换为上个步骤显示的进程ID
kill -9 19605
```

## 激活

**需求**

1. Web服务器（Apache或Nginx）
2. PHP支持（推荐7.0+）
3. 开启网址重写并设置规则

**网址重写**

- Apache放置在根目录下.htaccess文件

```
RewriteEngine On 
RewriteBase / 
RewriteCond %{REQUEST_FILENAME} !-f 
RewriteCond %{REQUEST_FILENAME} !-d 
RewriteCond %{REQUEST_FILENAME}.php -f 
RewriteRule ^(.+)$ /$1.php [L,QSA]
```

- Nginx规则添加到对应的conf文件
```
if (!-f $request_filename && !-d $request_filename && -f %{REQUEST_FILENAME}.php) {
    rewrite ^/(.+)$ /$1.php last;
}
```

**上传源码**
1. 打开kms.php修改KMS服务器地址
![](https://ws3.sinaimg.cn/large/005BYqpgly1fzazda2my0j30ll05zjrm.jpg)


2. 将index.html、kms.php、clean.php上传到网页目录（Apache需要将.htaccess上传至网站根目录）
- 英文版请使用index_en.html作为index.html

### 完成！Have a good time!

## 更新日志

- 2019.1.18 将Keys放到网页前端，使后端更加简洁。keys来自[微软网站](https://docs.microsoft.com/en-us/previous-versions/windows/it-pro/windows-server-2012-R2-and-2012/jj612867(v=ws.11))