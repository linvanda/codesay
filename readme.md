### 自动加载
1. 有两套自动加载：Yaf 自带的，以及 composer 的（在 index.php 入口文件注册的）；
2. 命名空间映射： app -> application;
3. application 下的 MVC 类(Controller,Model,Plugin)不要使用命名空间（即放在全局命名空间下），
这样能直接使用 Yaf 自带的自动加载机制，提高性能；
4. 其它类（如 Library）以 app 作为根命名空间，使用 composer 的加载机制；