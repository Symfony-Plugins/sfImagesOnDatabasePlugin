<?php

/**
 * image actions.
 *
 * @package    eCom
 * @subpackage image
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class sfImagesActions extends sfActions
{
  public function executeShow(sfWebRequest $request)
  {
    $this->image = $this->getRoute()->getObject();
    $this->forward404Unless($this->image);

    $response = $this->getResponse();
    $response->setHttpHeader('Content-Length', $this->image->getSize());
    $response->setHttpHeader('Last-Modified', $this->image->getLastModified());
    $response->setContentType($this->image->getMimeType());
    $response->setContent($this->image->getContent());

    $this->setLayout(false);
    return sfView::NONE;
  }

}