<?php

class PageElement
{

  /**
   * HTML tags
  **/

  public function open( $tag )
  {
    echo "<$tag>";
  }
  public function openw( $tag, $class, $id )
  {
    echo "<$tag class=\"$class\" id=\"$id\">";
  }
  public function shut( $tag )
  {
    echo "</$tag>";
  }

  public function open_multiple( $tag )
  {
    $foos = [ $tag ];
    foreach ( $foos as $foo )
    {
      echo "< $foo >";
    }
  }
  public function shut_multiple( $tag )
  {
    $foos = [ $tag ];
    foreach ( $foos as $foo )
    {
      echo "</ $foo >";
    }
  }

  public function title( $title )
  {
    echo <<<TITLE
    <h1> $title </h1>
TITLE;
  }

  /**
   * Placeholders
  **/

  public function nonesense()
  {
    echo 'nonesense...';
  }
  public function lorem_ipsum()
  {
    echo <<<LOREM
  <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquam faucibus purus in massa tempor. Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. Pellentesque elit eget gravida cum sociis natoque. Venenatis tellus in metus vulputate eu. Consectetur lorem donec massa sapien faucibus et. Consectetur libero id faucibus nisl tincidunt eget. Bibendum at varius vel pharetra vel turpis. Nibh tortor id aliquet lectus proin nibh nisl condimentum. Commodo sed egestas egestas fringilla. Accumsan lacus vel facilisis volutpat. Quisque id diam vel quam elementum pulvinar. Arcu dui vivamus arcu felis.
  </p><p>
  Felis donec et odio pellentesque diam volutpat commodo sed. Commodo nulla facilisi nullam vehicula ipsum a. Etiam erat velit scelerisque in. Consectetur libero id faucibus nisl tincidunt eget nullam non. Nec dui nunc mattis enim ut tellus. Dolor magna eget est lorem ipsum dolor. Diam maecenas sed enim ut. Suscipit tellus mauris a diam maecenas sed enim. Id diam maecenas ultricies mi eget mauris pharetra et. Nec ultrices dui sapien eget. Tincidunt tortor aliquam nulla facilisi cras. Nunc lobortis mattis aliquam faucibus purus in massa tempor nec.
  </p><p>
  Donec massa sapien faucibus et molestie ac feugiat sed. Id interdum velit laoreet id donec ultrices tincidunt arcu non. Purus sit amet volutpat consequat mauris nunc. Senectus et netus et malesuada fames ac. Augue lacus viverra vitae congue eu consequat. Elementum facilisis leo vel fringilla. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Arcu risus quis varius quam quisque id diam vel quam. At lectus urna duis convallis convallis. Nibh mauris cursus mattis molestie a iaculis at. In metus vulputate eu scelerisque felis imperdiet proin. Pretium viverra suspendisse potenti nullam ac tortor vitae purus.
  </p><p>
  Tellus rutrum tellus pellentesque eu. Adipiscing commodo elit at imperdiet. Amet purus gravida quis blandit turpis. Natoque penatibus et magnis dis parturient. Ut pharetra sit amet aliquam id diam maecenas. Viverra accumsan in nisl nisi. Dis parturient montes nascetur ridiculus. Massa tempor nec feugiat nisl. Sed nisi lacus sed viverra tellus. Maecenas pharetra convallis posuere morbi. Risus sed vulputate odio ut enim blandit volutpat maecenas volutpat.
  </p><p>
  Quis ipsum suspendisse ultrices gravida. Velit euismod in pellentesque massa placerat duis ultricies lacus sed. Pharetra vel turpis nunc eget lorem dolor sed. Est ullamcorper eget nulla facilisi etiam dignissim diam quis enim. Id porta nibh venenatis cras sed felis eget. Lectus proin nibh nisl condimentum id. Aliquam ultrices sagittis orci a scelerisque purus semper eget. Eget nunc scelerisque viverra mauris in aliquam sem fringilla. Nam at lectus urna duis convallis convallis tellus id interdum. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Ac felis donec et odio pellentesque diam volutpat. Arcu non odio euismod lacinia at quis risus sed. Ornare suspendisse sed nisi lacus sed viverra tellus in.
  </p>
LOREM;
  }
}

// EOF
