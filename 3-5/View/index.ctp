<div>
  <h3>Index Page</h3>
  <p><?= $message ?></p>
  <form method="post" action="/helo/index">
    <input type="text" name="text1">
    <input type="submit">
    <input type="hidden" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>">
  </form>
</div>
