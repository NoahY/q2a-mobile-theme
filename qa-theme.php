<?php
	class qa_html_theme extends qa_html_theme_base
	{
		function doctype()
		{
			$this->content['navigation']['footer']['feedback']['label'] = '<div class="feedback-image"></div>';
			$this->content['search']['button_label'] = '';
			$this->content['logo'] = '<A HREF="../" CLASS="qa-logo-link">'.qa_opt('site_title').'</A>';

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
	