# MySQL

## utf8與utf8mb4的差異
- MySQL utf8無法顯示生僻字與Emoji表情符號，utf8mb4可以。
- 原本MySQL內的utf8不是一般的UTF-8，他只有三個位元組，utf8mb4才是四個位元組，是真正的UTF-8字符集。
- utf8轉utf8mb4不會發生不相容的問題。
- utf8mb4_unicode_ci 準確但比較慢utf8mb4_general_ci 速度快但相對不準確。