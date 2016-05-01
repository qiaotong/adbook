<?php

class addressbookActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->addressess = Doctrine::getTable('Addresses')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AddressesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));
    $this->form = new AddressesForm();
    $this->processForm($request, $this->form);
    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($addresses = Doctrine::getTable('Addresses')->find(array($request->getParameter('id'))), sprintf('Object addresses does not exist (%s).', $request->getParameter('id')));
    $this->form = new AddressesForm($addresses);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($addresses = Doctrine::getTable('Addresses')->find(array($request->getParameter('id'))), sprintf('Object addresses does not exist (%s).', $request->getParameter('id')));
    $this->form = new AddressesForm($addresses);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($addresses = Doctrine::getTable('Addresses')->find(array($request->getParameter('id'))), sprintf('Object addresses does not exist (%s).', $request->getParameter('id')));
    $addresses->delete();

    $this->redirect('addressbook/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $addresses = $form->save();

      $this->redirect('addressbook/edit?id='.$addresses->getId());
    }
  }
}
