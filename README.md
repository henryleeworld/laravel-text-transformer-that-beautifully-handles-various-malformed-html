# Laravel 10 漂亮地處理各種錯誤格式 HTML 的文字轉換器

引入 stevebauman 的 hypertext 套件來擴增漂亮地處理各種錯誤格式 HTML（HyperText Markup Language，超文本標記語言）的文字轉換器，它的工作原理是將 HTML 字串作為輸入並刪除所有標記，留下純文字。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/transformer/source/` 來進行新聞 HTML 瀏覽。
- 你可以經由 `/transformer/text/` 來進行新聞純文字瀏覽。

----

## 畫面截圖
![](https://i.imgur.com/fl7CgfU.png)
> 將 HTML 轉換為純文字
