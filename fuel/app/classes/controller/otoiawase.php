<?php
class Controller_Otoiawase extends Controller_Template
{

	public function action_index()
	{
		$data['otoiawases'] = Model_Otoiawase::find('all');
		$this->template->title = "Otoiawases";
		$this->template->content = View::forge('otoiawase/index', $data);

	}

	
	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Otoiawase::validate('create');

			if ($val->run())
			{
				$otoiawase = Model_Otoiawase::forge(array(
					'name' => Input::post('name'),
					'email' => Input::post('email'),
					'message' => Input::post('message'),
				));

				if ($otoiawase and $otoiawase->save())
				{
					Session::set_flash('success', 'Added otoiawase #'.$otoiawase->id.'.');

					Response::redirect('otoiawase');
				}

				else
				{
					Session::set_flash('error', 'Could not save otoiawase.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Otoiawases";
		$this->template->content = View::forge('otoiawase/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('otoiawase');

		if ( ! $otoiawase = Model_Otoiawase::find($id))
		{
			Session::set_flash('error', 'Could not find otoiawase #'.$id);
			Response::redirect('otoiawase');
		}

		$val = Model_Otoiawase::validate('edit');

		if ($val->run())
		{
			$otoiawase->name = Input::post('name');
			$otoiawase->email = Input::post('email');
			$otoiawase->message = Input::post('message');

			if ($otoiawase->save())
			{
				Session::set_flash('success', 'Updated otoiawase #' . $id);

				Response::redirect('otoiawase');
			}

			else
			{
				Session::set_flash('error', 'Could not update otoiawase #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$otoiawase->name = $val->validated('name');
				$otoiawase->email = $val->validated('email');
				$otoiawase->message = $val->validated('message');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('otoiawase', $otoiawase, false);
		}

		$this->template->title = "Otoiawases";
		$this->template->content = View::forge('otoiawase/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('otoiawase');

		if ($otoiawase = Model_Otoiawase::find($id))
		{
			$otoiawase->delete();

			Session::set_flash('success', 'Deleted otoiawase #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete otoiawase #'.$id);
		}

		Response::redirect('otoiawase');

	}

}
