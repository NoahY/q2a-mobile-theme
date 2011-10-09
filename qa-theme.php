<?php
	class qa_html_theme extends qa_html_theme_base
	{
		function doctype()
		{
			$this->content['navigation']['footer']['feedback']['label'] = '<div class="feedback-image"></div>';
			$this->content['search']['button_label'] = '';

			qa_html_theme_base::doctype();
		}
		function sidepanel()
		{

		}		
		function nav_user_search()
		{
			$this->search();
			$this->nav('user');
		}
	}
	