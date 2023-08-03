<?php

class One
{
    private string $strOne = 'strOne';
    public string $strTwo = 'strTwo';
    public Two $class;

    public function __construct()
    {
        echo '__construct' . PHP_EOL;
        /**
         *  Этот метод вызывается автоматически при создании нового объекта класса. Он используется для инициализации объекта и установки его свойств
         */
    }

    public function __invoke()
    {
        echo '__invoke' . PHP_EOL;
        /**
         *  Позволяет вызвать объект как функцию. То есть, если экземпляр класса используется как функция, этот метод будет вызываться
         */
    }

    public function __get($name)
    {
        echo '__get' . PHP_EOL;
        /**
         *  Вызывается при чтении недоступных или несуществующих свойств объекта. Первый аргумент – имя свойства
         */
    }

    public function __set($name, $value)
    {
        echo '__set' . PHP_EOL;
        /**
         *  Вызывается при установке значения недоступного или несуществующего свойства объекта. Первый аргумент – имя свойства, а второй – значение
         */
    }

    public function __call($string, $array)
    {
        echo '__call' . PHP_EOL;
        /**
         *  Вызывается, когда пытаемся вызвать несуществующий или недоступный метод объекта. Первый аргумент – это имя метода, а второй – массив аргументов, переданных при вызове
         */
    }

    public static function __callStatic($string, $array)
    {
        echo '__callStatic' . PHP_EOL;
        /**
         *  Аналогичен __call, но применяется для статических методов класса
         */
    }

    public function __clone()
    {
        echo '__clone' . PHP_EOL;
        $this->class = new Two();
        /**
         *  Вызывается при клонировании объекта с помощью оператора clone. Позволяет контролировать процесс клонирования
         */
    }

    public function __debuginfo()
    {
        echo '__debuginfo' . PHP_EOL;
        return [
            'strTwo' => $this->strTwo
        ];
        /**
         *  Вызывается при использовании функции var_dump() для объекта. Позволяет определить данные, которые будут выводиться при отладке
         */
    }

    public function __destruct()
    {
        echo '__destruct' . PHP_EOL;
        /**
         *  Вызывается автоматически при удалении всех ссылок на объект или при завершении скрипта. Используется для очистки ресурсов и завершения действий перед уничтожением объекта
         */
    }

    public function __isset($name)
    {
        echo '__isset' . PHP_EOL;
        /**
         *  Вызывается при установке значения недоступного или несуществующего свойства объекта. Первый аргумент – имя свойства, а второй – значение
         */
    }

    public function __unset($name)
    {
        echo '__unset' . PHP_EOL;
        /**
         *  Вызывается при использовании оператора unset() для недоступного или несуществующего свойства объекта
         */
    }

    public function __sleep()
    {
        echo '__sleep' . PHP_EOL;
        return ['strTwo'];
        /**
         *  Вызывается перед сериализацией объекта с помощью serialize(). Позволяет определить список свойств, которые будут сериализованы
         */
    }

    public function __wakeup()
    {
        echo '__wakeup' . PHP_EOL;
        /**
         *   Вызывается после десериализации объекта с помощью unserialize(). Позволяет выполнить действия после восстановления состояния объекта
         */
    }

    public function __serialize(): array
    {
        echo '__serialize' . PHP_EOL;
        /**
         *  Вызывается перед сериализацией объекта с помощью serialize(). Позволяет определить данные для сериализации
         */
        return [
            'strTwo' => $this->strTwo,
        ];
    }

    public function __unserialize(array $data): void
    {
        echo '__unserialize' . PHP_EOL;
        /**
         *  Вызывается после десериализации объекта с помощью unserialize(). Позволяет восстановить объект после десериализации
         */
        $this->strTwo = $data['strTwo'];
    }

    public function __toString()
    {
        echo '__toString' . PHP_EOL;
        return 'string';
        /**
         *  Вызывается при попытке преобразовать объект в строку с помощью функции strval() или при использовании объекта в строковом контексте, например, при использовании в echo
         */
    }

    public static function __set_state($an_array)
    {
        echo '__set_state' . PHP_EOL;
        /**
         *  Вызывается при использовании функции var_export() для экспорта объекта. Позволяет контролировать, как объект будет создаваться из экспортированных данных
         */
    }


}

$obj = new One();
var_dump(get_object_vars($obj));
var_dump(get_class_vars(One::class));
echo 'END' . PHP_EOL;