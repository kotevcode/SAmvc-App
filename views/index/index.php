<h1>SAmvc Framework</h1>
<ul>
  <? foreach ($this->pages as $page): ?>
  <li><a href="<?=SAmvc\Framework\Env::get('url').'pages/'.$page['url']?>"><?=$page['name']?></a></li>
  <? endforeach; ?>
</ul>
