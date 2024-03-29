<?php
/**
 * General>>>
 * Cache-Control: определяет инструкции для кэширования на стороне клиента или сервера
 * Date: содержит дату и время создания запроса
 * Connection: используется для указания желаемого состояния подключения после завершения текущего запроса-ответа
 *
 * Request>>>
 * User-Agent: содержит информацию о браузере или клиенте, отправляющем запрос
 * Host: указывает доменное имя сервера, к которому отправляется запрос
 * Accept: определяет типы контента, которые клиент готов принять в ответе
 * Authorization: используется для передачи данных аутентификации, таких как токен доступа
 * Cookie: передает серверу сохраненные куки (состояние клиента)
 *
 * Response>>>
 * Content-Type: определяет тип данных, содержащихся в теле ответа
 * Location: используется для выполнения перенаправления. Он указывает новый URL для клиента.
 * Set-Cookie: используется для установки куки на клиенте. Сервер может отправлять этот заголовок для сохранения состояния на стороне клиента
 * ETag: содержит уникальный идентификатор ресурса. Используется для оптимизации кэширования

 */
