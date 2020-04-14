仅为测试，开发组件包过程

```
mkdir -p packages/james/tree
```

cd 到tree目录  composer init 生成composer.json

在tree 里面建相应文件夹

```
                ├── src  # 逻辑代码文件夹
                ├── tests # 测试用例文件夹
                ├── README.md
                ├── composer.json
```

配置composer.json 

```
{

    "autoload": {

        "psr-4": {

            "James\TreeClass\": "src/"  //应该是命名空间指向路径

        }

    },

    "autoload-dev": {

        "psr-4": {

            "James\TreeClass\Tests\": "tests/"

        }

    },

}

```



写相关逻辑 其实不需要手动把服务类加入一样可以。laravel5.5



composer dump-autoload