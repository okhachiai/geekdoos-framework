<?= $renderer->render('header')?>
    <h1>Welcome to the blog</h1>
    <ul>
        <li><a href="<?= $router->generateUri('blog.show', ['slug' => 'article-1']) ?>">Article 1</a></li>
        <li>Article 2</li>
        <li>Article 3</li>
        <li>Article 4</li>
        <li>Article 5</li>
        <li>Article 6</li>
        <li>Article 7</li>
        <li>Article 8</li>
        <li>Article 9</li>
        <li>Article 10</li>
    </ul>
<?= $renderer->render('footer')?>