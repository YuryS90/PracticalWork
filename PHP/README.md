необходимо сделать ~~одну~~ другую вещь
**сильное выделение**
*выделение*

___
 
  * элемент маркированного списка
 - ещё один элемент ненумерованного списка
 + буллеты элементов могут быть разными
 
 1. Элемент нумерованного списка
 2. Элемент №2 того же списка
 9. Элемент №3 списка — элементы нумеруются по порядку, цифра в начале строки не имеет значения
 
 ___

Заголовки:
Создание заголовков производится путём помещения знака решетки перед текстом заголовка. Количество знаков «#» соответствует уровню заголовка. HTML предоставляет 6 уровней заголовков.
# Заголовок первого уровня
#### Заголовок четвёртого уровня

Заголовок первого уровня
========================
Заголовок второго уровня
------------------------

___

> Данный текст будет заключен в HTML-теги <blockquote>Привет</blockquote>

Ссылки:
[Текст ссылки](адрес://ссылки.здесь "Заголовок ссылки")
или

[Текст ссылки][тег]
и где-нибудь в документе (например в самом низу)

[тег]: адрес://ссылки.здесь "Заголовок ссылки"

Изображения:
![Alt-текст](адрес://ссылки.здесь "Заголовок изображения")

|   |   |   |   |   |
|---|---|---|---|---|
|   |   |   |   |   |
|   |   |   |   |   |
|   |   |   |   |   |

| Столы | Являются | Круто |
| ---------- |: -------------: | ------: |
| Кол 1 является | по левому краю | 1600 $ |
| Кол 2 является | по центру | 12 долларов США |
| Кол 3 является | по правому краю | $ 1 |

Here's our logo (hover to see the title text):

Inline-style: 
![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 1")

Reference-style: 
![alt text][logo]

[logo]: https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 2"

Colons can be used to align columns.

| Tables        | Are           | Cool  |
| ------------- |:-------------:| -----:|
| col 3 is      | right-aligned | $1600 |
| col 2 is      | centered      |   $12 |
| zebra stripes | are neat      |    $1 |


| Syntax      | Description | Test Text     |
| :---        |    :----:   |          ---: |
| Header      | Title       | Here's this   |
| Paragraph   | Text        | And more      |

```javascript
var s = "JavaScript syntax highlighting";
alert(s);
```
 
```python
s = "Python syntax highlighting"
print s
```
 
```
No language indicated, so no syntax highlighting. 
But let's throw in a <b>tag</b>.
```

> Blockquotes are very handy in email to emulate reply text.
> This line is part of the same quote.

Quote break.

> This is a very long line that will still be quoted properly when it wraps. Oh boy let's keep writing to make sure this is long enough to actually wrap for everyone. Oh, you can *put* **Markdown** into a blockquote.

<dl>
  <dt>Definition list</dt>
  <dd>Is something people use sometimes.</dd>

  <dt>Markdown in HTML</dt>
  <dd>Does *not* work **very** well. Use HTML <em>tags</em>.</dd>
</dl>

Three or more...

---

Hyphens

***

Asterisks

___

Underscores

Line Breaks
My basic recommendation for learning how line breaks work is to experiment and discover -- hit <Enter> once (i.e., insert one newline), then hit it twice (i.e., insert two newlines), see what happens. You'll soon learn to get what you want. "Markdown Toggle" is your friend.

Here are some things to try out:

Here's a line for us to start with.

This line is separated from the one above by two newlines, so it will be a *separate paragraph*.

This line is also a separate paragraph, but...
This line is only separated by a single newline, so it's a separate line in the *same paragraph*.

YouTube Videos
They can't be added directly but you can add an image with a link to the video like this:

<a href="http://www.youtube.com/watch?feature=player_embedded&v=YOUTUBE_VIDEO_ID_HERE
" target="_blank"><img src="http://img.youtube.com/vi/YOUTUBE_VIDEO_ID_HERE/0.jpg" 
alt="IMAGE ALT TEXT HERE" width="240" height="180" border="10" /></a>
Or, in pure Markdown, but losing the image sizing and border:

[![IMAGE ALT TEXT HERE](http://img.youtube.com/vi/YOUTUBE_VIDEO_ID_HERE/0.jpg)](http://www.youtube.com/watch?v=YOUTUBE_VIDEO_ID_HERE)


First Term
: This is the definition of the first term.

Second Term
: This is one definition of the second term.
: This is another definition of the second term.


- [x] Write the press release
- [ ] Update the website
- [ ] Contact the media


				
				
				
				

