#Helper beerhold.it

В twig-шаблонах станут доступными следующие функции

### Цветная фотография (ширина, высота)

~~~
<img src="{{ beerhold(300, 200) }}" alt="" />
~~~
**результат:**
~~~
<img src="http://beerhold.it/300/200/?hash={HASH}" alt="" />
~~~
<img src="http://beerhold.it/300/200/" alt="" />

### [Grayscale] Черно-белая фотография (ширина, высота)

~~~
<img src="{{ beerhold_g(300, 200) }}" alt="" />
~~~
**результат:**
~~~
<img src="http://beerhold.it/300/200/g" alt="" />
~~~
<img src="http://beerhold.it/300/200/g" alt="" />

### Sepia (ширина, высота)

~~~
<img src="{{ beerhold_s(300, 200) }}" alt="" />
~~~
**результат:**
~~~
<img src="http://beerhold.it/300/200/s?hash={HASH}" alt="" />
~~~
<img src="http://beerhold.it/300/200/s" alt="" />

### Негатив (ширина, высота)

~~~
<img src="{{ beerhold_n(300, 200) }}" alt="" />
~~~
**результат:**
~~~
<img src="http://beerhold.it/300/200/n?hash={HASH}" alt="" />
~~~
<img src="http://beerhold.it/300/200/n" alt="" />
