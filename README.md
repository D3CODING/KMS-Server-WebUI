# KMS激活服务器及前端UI(可生成bat批处理快速激活)

## 安装KMS激活服务器
1. 下载kms.tar.gz到服务器并解压
2. 查看服务器CPU架构
- Linux服务器可输入命令

```
cat /proc/cpuinfo
```

![Snipaste_2018-07-20_15-28-49](https://i.lichen0.com/Snipaste/Snipaste_2018-07-20_15-28-49.png)

3. 进入对应目录，运行激活服务器
- 这里以Centos 7 Intel CPU为例

```
cd binaries/Linux/intel/static
./vlmcsd-x64-musl-static
```
- 查看运行情况

```
#其他CPU记得替换命令中的文件名
ps -ef | grep vlmcsd-x64-musl-static
```

![Snipaste_2018-07-20_15-34-46](https://i.lichen0.com/Snipaste/Snipaste_2018-07-20_15-34-46.png)

激活服务器需要用到1688端口，请在安全组中放通

- 关闭激活服务器

```
#19605替换为上个步骤显示的进程ID
kill -9 19605
```

## 手动激活系统
- KMS激活仅适用于批量激活版本，例如专业版、企业版或Windows Server，旗舰版和家庭版请使用OEM激活
1. 设置KMS服务器地址

```
#xxx为服务器IP或绑定的域名
slmgr /skms xxx
```

2. 设置密钥（部分情况下可忽略此步）
- 前往[微软官方网站](https://technet.microsoft.com/en-us/library/jj612867.aspx)取得相应KMS密钥

```
#后面替换为相应版本KMS密钥
slmgr /ipk xxxxx-xxxxx-xxxxx-xxxxx
```

3. 连接服务器激活

```
slmgr /ato
```

4. 检查激活状态

```
slmgr /xpr
```

## 手动卸载激活

```
slmgr /upk
slmgr /ckms
slmgr /rearm
```

## 部署自动生成激活脚本系统
- 需要Web服务器PHP支持
- 已录入KMS密钥，无需数据库

1. 打开kms.php修改第二行的KMS服务器地址

```
$kms_server = 'xxxx';
```

2. 将index.html、kms.php、clean.php上传到网页目录即可

3. 选择系统，点击即可生成一键激活脚本

![Snipaste_2018-07-20_15-54-12](https://i.lichen0.com/Snipaste/Snipaste_2018-07-20_15-54-12.png)

![Snipaste_2018-07-20_15-54-25](https://i.lichen0.com/Snipaste/Snipaste_2018-07-20_15-54-25.png)