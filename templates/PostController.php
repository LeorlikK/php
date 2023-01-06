<?php

//interface InterfaceTest
//{
//    public function work();
//}
//
//trait TraitTest
//{
//    public function work(): string
//    {
//        return 'Im Trait';
//    }
//}
//
//class CLassTest
//{
////    use TraitTest;
//    private static ?self $att = null;
//    public int $str = 10;
//
//    public static function tt():self
//    {
//        if (!isset(self::$att)) return self::$att = new self;
//        return self::$att;
//    }
//
////    public static function static(): self
////    {
////        return self::$att;
////    }
////
//    public function public(): int|string
//    {
//        return '<br>' . (string) ++$this->str;
//    }
//
//    public function __clone(): void
//    {
//        // TODO: Implement __clone() method.
//    }
//
//    public function __wakeup(): void
//    {
//        // TODO: Implement __wakeup() method.
//    }
//}
//
//$objOne = CLassTest::tt();
//echo $objOne->public();
//$objTwo = new CLassTest();
////$objTwo = CLassTest::tt();
//echo $objTwo->public();
//echo $objOne->public();
////$obj->public();

class Configuration
{
    private string $name;
    private string $arguments;

    /**
     * @return string
     */
    public function getArguments(): string
    {
        return $this->arguments;
    }

    /**
     * @return void
     */
    public function setArguments(int $arguments): void
    {
        $this->arguments = $arguments;
    }

    /**
     * @param string $name
     * @param string $arguments
     */
    public function __construct(string $name, string $arguments)
    {
        $this->name = $name;
        $this->arguments = $arguments;
    }

    public function setName($name):void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

class Controller
{
    private Configuration $config;

    /**
     * @param Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    public function getConfiguration(): string
    {
        return $this->config->getName() . '@' . $this->config->getArguments();
    }
}

$conf = new Configuration('PostController', 'index');
$controller = new Controller($conf);
echo $controller->getConfiguration();