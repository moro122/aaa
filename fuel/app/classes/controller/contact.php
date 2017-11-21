<?php
class Controller_Contact extends Controller_Template
{

	public function action_index()
	{
		$data['Contacts'] = Model_Contact::find('all');
		$this->template->title = "Contacts";
		$this->template->content = View::forge('contact/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('contact');

		if ( ! $data['Contact'] = Model_Contact::find($id))
		{
			Session::set_flash('error', 'Could not find Contact #'.$id);
			Response::redirect('contact');
		}

		$this->template->title = "Contact";
		$this->template->content = View::forge('contact/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Contact::validate('create');

			if ($val->run())
			{
				$Contact = Model_Contact::forge(array(
					'name' => Input::post('name'),
					'email' => Input::post('email'),
					'message' => Input::post('message'),
				));

				if ($Contact and $Contact->save())
				{
					Session::set_flash('success', 'Added Contact #'.$Contact->id.'.');

					Response::redirect('contact');
				}

				else
				{
					Session::set_flash('error', 'Could not save Contact.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Contacts";
		$this->template->content = View::forge('contact/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('contact');

		if ( ! $Contact = Model_Contact::find($id))
		{
			Session::set_flash('error', 'Could not find Contact #'.$id);
			Response::redirect('contact');
		}

		$val = Model_Contact::validate('edit');

		if ($val->run())
		{
			$Contact->name = Input::post('name');
			$Contact->email = Input::post('email');
			$Contact->message = Input::post('message');

			if ($Contact->save())
			{
				Session::set_flash('success', 'Updated Contact #' . $id);

				Response::redirect('contact');
			}

			else
			{
				Session::set_flash('error', 'Could not update Contact #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$Contact->name = $val->validated('name');
				$Contact->email = $val->validated('email');
				$Contact->message = $val->validated('message');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('Contact', $Contact, false);
		}

		$this->template->title = "Contacts";
		$this->template->content = View::forge('contact/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('contact');

		if ($Contact = Model_Contact::find($id))
		{
			$Contact->delete();

			Session::set_flash('success', 'Deleted Contact #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete Contact #'.$id);
		}

		Response::redirect('contact');

	}

}
