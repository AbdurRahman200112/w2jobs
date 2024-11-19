<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    
    $options = array(
      array('id' => '1','key' => 'primary_data','value' => '{"logo":"/assets/images/logo/logo_01.png","favicon":"/assets/images/fav-icon/icon.png","contact_email":"contact@jobi.com","contact_phone":"310.841.5500","address":"1012 Pebda Parkway, Mirpur 2, Dhaka, Bangladesh","socials":{"facebook":"https://www.facebook.com/","youtube":"https://youtube.com/","twitter":"https://twitter.com/","instagram":"https://www.instagram.com/","linkedin":"https://linkedin.com/"},"deep_logo":"/assets/images/logo/logo_03.png"}','lang' => 'en'),
      array('id' => '2','key' => 'tax','value' => '0','lang' => 'en'),
      array('id' => '3','key' => 'base_currency','value' => '{"name":"USD","icon":"$","position":"left"}','lang' => 'en'),
      array('id' => '4','key' => 'invoice_data','value' => '{"company_name":"Whatserve","address":"San francisco","city":"California","country":"USA","post_code":"12345"}','lang' => 'en'),
      array('id' => '5','key' => 'languages','value' => '{"en":"English"}','lang' => 'en'),
      array('id' => '6','key' => 'seo_home','value' => '{"site_name":"Home","matatag":"","matadescription":"","twitter_site_title":"home","preview":""}','lang' => 'en'),
      array('id' => '7','key' => 'seo_blog','value' => '{"site_name":"Blogs","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '8','key' => 'seo_about','value' => '{"site_name":"About Us","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '9','key' => 'seo_pricing','value' => '{"site_name":"Pricing","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '10','key' => 'seo_contact','value' => '{"site_name":"Contact Us","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '11','key' => 'seo_faq','value' => '{"site_name":"Faq","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '12','key' => 'seo_team','value' => '{"site_name":"Our Team","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '13','key' => 'seo_features','value' => '{"site_name":"Features","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '14','key' => 'seo_how_its_works','value' => '{"site_name":"How its work","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '15','key' => 'header_footer','value' => '{"header":{"announcement_type":"NOW HIRING:","announcement_title":"Are You A Driven And Motivated 1st Line IT Support Engineer?","announcement_link":"\\/contact"},"footer":{"title":"Ready To Launch \\ud83d\\ude80","description":"Automate your conversations and boost your marketing strategy","right_image_link":"\\/pricing","left_image_link":"\\/pricing"},"footer_button_image":"\\/demo\\/1678211121jY056A0fKjEFLQN7lJeZ.png","footer_left_button_image":"\\/demo\\/1678211121yYLog9HsVoV5QCJAvX4g.png"}','lang' => 'en'),
      array('id' => '16','key' => 'home-page','value' => '{"heading":{"title":"Boost your marketing with <strong>WASender<\\/strong>","left_button_link":"\\/pricing","right_button_link":"\\/pricing"},"brand":{"title":"Over 32K+ software businesses growing with WASender","status":"active"},"cta":{"title":"More than 13,000 teams use our platform"},"features":{"title":"Explore Our Amazing Features \\ud83d\\udd25","status":"active"},"platform":{"title":"Start Building Chatbot using WASender","description":"We provide a bird`s eye perspective of your entire bot, which aids in the development of a highly engaging bot. You can create, test, and build chatbots graphically using a single no-code online interface.","button_title":"Get Started","button_link":"\\/pricing"},"account_area":{"heading":"Create your free account","subheading":"It takes only 3 minutes to get started","description":"Plug your messaging channels, install your widget and\\r\\nyou\\u2019re ready to go","form_link":"\\/register\\/2","status":"active","button_link1":"\\/pricing","button_link2":"\\/pricing"},"about":{"title":"Whatsapp Automation","description":"A WhatsApp bot can work around the clock and can handle multiple requests simultaneously, which means that it is always available to assist customers, even outside of regular business hours.","action_area_title":"Lets create a Whatsapp chatbot \\ud83d\\ude80"},"top_faq":{"title":"WASender For Creatives business \\ud83d\\ude07","description":"WASender is the best quaint james bond victoria sponge happy days cras arse over blatant"},"integration":{"title":"Top Integration \\ud83e\\udd1d\\ud83c\\udffb"},"testimonial":{"title":"User Feedback \\ud83c\\udf96\\ufe0f"},"calltoaction":{"title":"Discover a better way to <br> manage spendings","button_title":"Get Started Now","button_link":"\\/pricing"},"right_button_image":"\\/demo\\/16782229849w7zEZUReAELpYZzBhfy.png","left_button_image":"\\/demo\\/16782229844xnXg3VVbopZTUmCVkoP.png","hero_left_image":"\\/uploads\\/1680991267dcZhpgfhm46WulMpbFmU.png","hero_image":"\\/demo\\/1678140600lS8T5SkGWjUDMw00x8aR.png","testimonial_cover":"\\/uploads\\/1680990550b4VGZjg5I0mHrS0ZEzEO.png","integration_cover":"\\/uploads\\/1680691072MdDwD8iZV7nFu32OLg7Z.png","integration_left":"\\/uploads\\/1680687785yK5jB6wU8F0njvElGAqE.png","integration_right":"\\/uploads\\/1680687785b4Qk1bP8HMnMCuedEqOo.png","hero_right_image":"\\/uploads\\/1680991267IpQIAwGSbY5ZIFRwO6Pp.png","cta_logo":"\\/demo\\/1678039536jzV8Ut6FTWgytwnEZxo0.png","cta_thumbnail":"\\/demo\\/1678139635o3AHoY7EGdexS7UuUajq.png","platform_thumbnail":"\\/demo\\/1678139743EuXomMHlbRJIEUobx62D.png","account_area_thumbnail":"\\/demo\\/1678140032Wxqq2w6cndL4uWiEHf8B.png","account_area_top_thumbnail":"\\/demo\\/1678039536eRShFlGn3Uw9tN1X14E0.png","account_area_bottom_thumbnail":"\\/demo\\/16780395365JXHyeVBXUVAldB1V5Se.png","account_footer_left_image":"\\/demo\\/16780395365VbXNjp8vpREwrrQ8R44.png","account_footer_right_image":"\\/demo\\/1678039536cX0XI21coIdJ3M1Im54A.png","faq_cover":"\\/uploads\\/1680990550DfwMWKaP9MfCYR6fPued.png","about_cover":"\\/uploads\\/1680989187xEbFX8vGfdBmWfMkb3Xo.gif"}','lang' => 'en'),
      array('id' => '17','key' => 'why-choose','value' => '{"title":"Why choose WASender \\ud83c\\udf96\\ufe0f","subtitle":"Get start","left_button_link":"\\/pricing","right_button_link":"\\/pricing","left_block_title":"Active Customers","left_block_value":"1200","center_block_title":"Total Customers","center_block_value":"1500","right_block_title":"Positive Reviews","right_block_value":"600","left_button_image":"\\/demo\\/1678120554l1bhGUjz28tmiBtCqTK6.png","right_button_image":"\\/demo\\/1678120554IAVDm9xBLZXYtGAamM0I.png","left_block_image":"\\/demo\\/1678120554hneDbhf9WG6aXvdV0h6q.png","center_block_image":"\\/demo\\/1678120554PcP79pqqlziQ71Yf1T70.png","right_block_image":"\\/demo\\/1678120554dGH99dtfF4slpDVVHjT1.png"}','lang' => 'en'),
      array('id' => '18','key' => 'contact-page','value' => '{"address":"1012 Pebda Parkway, Mirpur 2 Dhaka,","country":"Bangladesh","map_link":"https:\\/\\/maps.google.com\\/maps?width=600&height=400&hl=en&q=dhaka%20collage&t=&z=12&ie=UTF8&iwloc=B&output=embed","contact1":"8801234567890","contact2":"8801234567891","email1":"support@email.com","email2":"contact@email.com","contact_info_text":"Open a chat or give us call at","contact_info_number":"310.841.5500","live_chat_service_text":"live chat service","live_chat_service_website":"www.jobilivechat.com"}','lang' => 'en'),
      array('id' => '19','key' => 'about-page','value' => '{"cta_s1":{"features":[{"title":"Who we are?","body":"Our founders Dustin Moskovitz and Justin lorem Rosenstein met while leading Engineering teams at Facebook quesi. Lorem ipsum dolor sit, amet consectetur adipisicing elit."},{"title":"What\\u2019s our goal","body":"Our founders Dustin Moskovitz and Justin lorem Rosenstein met while leading Engineering teams at Facebook quesi. Lorem ipsum dolor sit, amet consectetur adipisicing elit."},{"title":"Our vision","body":"Our founders Dustin Moskovitz and Justin lorem Rosenstein met while leading Engineering teams at Facebook quesi. Lorem ipsum dolor sit, amet consectetur adipisicing elit."}],"title":"We\\u2019ve been helping customer globally.","image":null,"image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"cta_s2":{"title":"Get over 50.000+ talented experts in jobi.","subtitle":"A full hybrid workforce management tools are yours to use, as well as access to our top 1% of talent.","features":"Seamless searching, Get top 3% experts for your project, Get top 3% experts for your project","btn_text":"Post A Job","btn_link":"\\/employer\\/jobs\\/create","image1":"\\/assets\\/images\\/assets\\/img_02.jpg","image2":"\\/assets\\/images\\/assets\\/img_03.jpg","image3":"\\/assets\\/images\\/assets\\/img_04.jpg","image4":"\\/assets\\/images\\/assets\\/screen_01.png","image5":"\\/assets\\/images\\/assets\\/screen_02.png","image6":"\\/assets\\/images\\/assets\\/screen_03.png"},"video_s1":{"link":"https:\\/\\/www.youtube.com\\/embed\\/aXFSJTjVjw0","image":"\\/assets\\/images\\/assets\\/img_45.jpg","completed_jobs":"7million","clients":"30k+","applied_jobs":"13billion"}}','lang' => 'en'),
      array('id' => '20','key' => 'counter','value' => '{"experience":"12","active_customers":"900","positive_reviews":"200","satisfied_customers":"800"}','lang' => 'en'),
      array('id' => '21','key' => 'theme_path','value' => '{"home":"One","job_list":{"path":"One","type":"List"},"job_detail":"One","candidate_list":"One","candidate_detail":"One","company_list":"One","blog":"One"}','lang' => 'en'),
      array('id' => '22','key' => 'themeFive','value' => '{"hero":{"title":"Find your Job without any hassle.","subtitle":"With the largest professional creative community online, simply search through from our website","image1":null,"image3":null,"image4":null,"image":"\\/uploads\\/24\\/01\\/PkIUOORPcY07PDT4T5Ud.jpg","image2":"\\/uploads\\/24\\/01\\/KKIWeulNoCuNjODNSAsY.png","image5":null,"image6":null},"cta_s1":{"title":"Find top talents from jobi.","features":[{"title":"Seamless Search","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customisable page design to reflect your brand."},{"title":"Hire top talents","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customizable page design to reflect your brand."},{"title":"Protected payments, every time","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customizable page design to reflect your brand."}],"btn_text":"Learn More","btn_link":"\\/candidates","image1":"\\/assets\\/images\\/assets\\/screen_09.png","image2":"\\/assets\\/images\\/assets\\/screen_08.png","image":null,"image3":null,"image4":null,"image5":null,"image6":null},"cta_s2":{"image":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null,"title":"Complete <span class=\\"fw-light fst-italic\\">job portal<\\/span> for everyone.","left_btn_text":"Looking for job?","left_btn_link":"\\/jobs","right_btn_text":"Post A Job","right_btn_link":"\\/register","image1":"\\/uploads\\/24\\/01\\/ASsazUvtF4F3SFaGlH68.png"},"cta_s3":{"image":null,"image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"cta_s4":{"image":null,"image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"feedback_section":{"image":null,"image1":null}}','lang' => 'en'),
      array('id' => '23','key' => 'themeFour','value' => '{"hero":{"title":"Find your job without any hassle.","subtitle":"Jobs & Job search. Find jobs in global. Executive jobs & work.","btn_text":"Upload Your CV","btn_link":"\\/register","image":"\\/uploads\\/24\\/01\\/gYRnsN9H7VweG7zRsfn8.jpg","image5":null,"image6":null,"image1":"\\/uploads\\/24\\/01\\/qkF6xFc1pD9qBiUX3DpR.png","image2":"\\/uploads\\/24\\/01\\/hOz25CbpLRbcZ4z65OVN.png","image3":"\\/uploads\\/24\\/01\\/TODhc2kNycELTJHs4pKp.png","image4":"\\/uploads\\/24\\/01\\/k4mf8qieimApokUmc5es.png"},"cta_s1":{"title":"Get the job of your dreams quickly.","subtitle":"Commonly used in the graphic, print publishing industris for previewing visual mockups. limited social discrimination.","btn_text":"Find your job.","btn_link":"\\/jobs","image1":"\\/assets\\/images\\/assets\\/img_28.jpg","image2":"\\/assets\\/images\\/assets\\/screen_14.png","item1":"7million","item2":"30k+","item3":"13billion","image":null,"image3":null,"image4":null,"image5":null,"image6":null},"cta_s2":{"top_title":"LOOKING FOR AN EXPERT?","title":"Find top talents from jobi.","features":[{"title":"Seamless Search","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customizable page design to reflect your brand."},{"title":"Hire top talents","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customizable page design to reflect your brand."}],"btn_text":"Find Talents","btn_link":"\\/candidates","image1":"\\/assets\\/images\\/assets\\/img_11.jpg","image2":"\\/assets\\/images\\/assets\\/img_12.jpg","image3":"\\/assets\\/images\\/assets\\/img_13.jpg","image":null,"image4":null,"image5":null,"image6":null},"cta_s3":{"image":null,"image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"cta_s4":{"image":null,"image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"feedback_section":{"image":null,"image1":null}}','lang' => 'en'),
      array('id' => '24','key' => 'themeOne','value' => '{"hero":{"title":"Find & Hire  Top 3% of expert on jobi.","subtitle":"We delivered blazing fast & striking work solution","image1":null,"image2":null,"image3":null,"image4":null,"image":"\\/uploads\\/23\\/12\\/RtUH0F0vJ2zhUusqEYOA.jpg","image5":null,"image6":null},"cta_s1":{"title":"Get over 50.000+ talented experts in jobi.","subtitle":"A full hybrid workforce management tools are yours to use, as well as access to our top 1% of talent.","features":"Seamless searching, Get top 3% experts for your project, Get top 3% experts for your project","btn_text":"Post A Job","btn_link":"\\/employer\\/jobs\\/create","image1":"\\/assets\\/images\\/assets\\/img_02.jpg","image2":"\\/assets\\/images\\/assets\\/img_03.jpg","image3":"\\/assets\\/images\\/assets\\/img_04.jpg","image4":"\\/assets\\/images\\/assets\\/screen_01.png","image5":"\\/assets\\/images\\/assets\\/screen_02.png","image6":"\\/assets\\/images\\/assets\\/screen_03.png","image":null},"cta_s2":{"top_title":"TOP BRAND","title":"Collaboration with Top Brands.","subtitle":"We collaborate with a number of top tier companies on imagining the future of work, have a look.","btn_text":"Learn More","btn_link":"\\/about-us","image1":"\\/assets\\/images\\/logo\\/logo_02.png","image2":"\\/assets\\/images\\/logo\\/media_09.png","image3":"\\/assets\\/images\\/logo\\/media_10.png","image4":"\\/assets\\/images\\/logo\\/media_11.png","image5":"\\/assets\\/images\\/logo\\/media_12.png","image6":"\\/assets\\/images\\/logo\\/media_13.png","image":null},"cta_s3":{"title":"Get your <br><span>Matched Jobs<\\/span> in a few minutes. aa","subtitle":"Find your dream job & earn from world leading brands. Upload your CV now. vvv","btn_text":"Upload Your CV","btn_link":"\\/","image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null,"image":"\\/uploads\\/23\\/12\\/GiVJfQEpt43cjSVa9wLc.png"},"category_section":{"title":"Most Demanding Categories.","title_right":"Together with useful notifications, collaboration, insights, and improvement tip lorem etc.","btn_text":"Explore all fields","btn_link":"\\/jobs"},"cta_s4":{"image":null,"image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"feedback_section":{"image":null,"image1":null}}','lang' => 'en'),
      array('id' => '25','key' => 'themeSeven','value' => '{"hero":{"title":"Find & Hire Experts for any Job","subtitle":"Jobs & Job search. Find jobs in global. Executive jobs & work.","image":null,"image3":null,"image4":null,"image5":null,"image6":null,"image1":"\\/uploads\\/24\\/01\\/Dz71AocCx5Ui4nxPO6gP.png","image2":"\\/uploads\\/24\\/01\\/yfH0YieA2AwZ9jW6nJZ6.png"},"cta_s1":{"top_title":"Why choose us?","title":"World of talent at your fingertips","features":[{"title":"Seamless Search","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customisable page design to reflect your brand."},{"title":"Hire top talents","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customizable page design to reflect your brand."},{"title":"Protected payments, every time","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customizable page design to reflect your brand."}],"btn_text":"Learn More","btn_link":"\\/candidates","image1":"\\/assets\\/images\\/assets\\/img_37.jpg","image2":"\\/assets\\/images\\/assets\\/img_38.jpg","image3":"\\/assets\\/images\\/assets\\/img_04.jpg","image4":"\\/assets\\/images\\/assets\\/screen_01.png","image5":"\\/assets\\/images\\/assets\\/screen_02.png","image6":"\\/assets\\/images\\/assets\\/screen_03.png","image":null},"cta_s2":{"title":"Get your Matched Jobs in a few minutes.","subtitle":"Find your dream job & earn from world leading brands. Upload your CV now.","btn_text":"Upload your CV","btn_link":"\\/register","image1":"\\/assets\\/images\\/assets\\/img_41.png","image2":null,"image3":null,"image4":null,"image5":null,"image6":null,"image":"\\/uploads\\/24\\/01\\/c8B9um8aV7RNO2uZ1kTF.png"},"cta_s3":{"image":null,"image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"cta_s4":{"image":null,"image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"feedback_section":{"image":null,"image1":null}}','lang' => 'en'),
      array('id' => '26','key' => 'themeSix','value' => '{"hero":{"title":"Find & Hire Experts for any Job.","subtitle":"Unlock your potential with quality job & earn from world leading brands.","item1":"30k+","item2":"3%","item3":"12mil","image":null,"image4":null,"image5":null,"image6":null,"image1":"\\/uploads\\/24\\/01\\/27OBaO0hGUrgugYih29s.jpg","image2":"\\/uploads\\/24\\/01\\/oNHQJbw1cW0XDQ9HHzrZ.jpg","image3":"\\/uploads\\/24\\/01\\/flP1ftVXJh9bnureGEJF.jpg"},"cta_s1":{"video":"https:\\/\\/www.youtube.com\\/embed\\/aXFSJTjVjw0","title":"Let\\u2019s get started It\\u2019s <span style=\\"color: #00BF58;\\">simple.<\\/span>","subtitle":"Get access to our top 1% talent as well as a complete set of hybrid workforce management tools.","image1":"\\/assets\\/images\\/assets\\/img_21.jpg","image":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null,"video_id":"XJTD3VOIWuw","steps":[{"title":"It\\u2019s take 2 minutes to open an account.","text":"OPEN ACOUNT","link":"\\/register"},{"title":"Find talents or search your desire work.","text":"APPLY JOB OR HIRE","link":"\\/register"},{"title":"Get work done quickly with jobi gateway.","text":"PAYMENT METHOD","link":"\\/register"}]},"cta_s2":{"top_title":"Why choose us?","title":"World of talent at your fingertips","features":[{"title":"Seamless Search","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customisable page design to reflect your brand."},{"title":"Hire top talents","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customisable page design to reflect your brand."},{"title":"Protected payments, every time","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customisable page design to reflect your brand."}],"btn_text":"Learn More","btn_link":"\\/candidates","image1":"\\/assets\\/images\\/assets\\/img_37.jpg","image2":"\\/assets\\/images\\/assets\\/img_38.jpg","image3":"\\/assets\\/images\\/assets\\/img_04.jpg","image4":"\\/assets\\/images\\/assets\\/screen_01.png","image5":"\\/assets\\/images\\/assets\\/screen_02.png","image6":"\\/assets\\/images\\/assets\\/screen_03.png","image":null},"cta_s3":{"top_title":"TOP BRAND","title":"Collaboration with Top Brands.","subtitle":"We collaborate with a number of top tier companies on imagining the future of work, have a look.","btn_text":"Learn More","btn_link":"\\/about-us","image1":"\\/assets\\/images\\/logo\\/logo_02.png","image2":"\\/assets\\/images\\/logo\\/media_09.png","image3":"\\/assets\\/images\\/logo\\/media_10.png","image4":"\\/assets\\/images\\/logo\\/media_11.png","image5":"\\/assets\\/images\\/logo\\/media_12.png","image6":"\\/assets\\/images\\/logo\\/media_13.png","image":null},"cta_s4":{"image":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null,"title":"Complete job portal for everyone.","subtitle":"Find your dream job & earn from all world the leading brands.","left_btn_text":"Looking for job?","left_btn_link":"\\/jobs","right_btn_text":"Start Hiring","right_btn_link":"\\/candidates","image1":"\\/uploads\\/24\\/01\\/0yFtMJXzrHMYsuSIOR76.jpg"},"feedback_section":{"image1":null,"title":"What\\u2019s our clients Think of us?","image":"\\/uploads\\/24\\/01\\/9Qo7coQfRhyItEHYSOQj.jpg"}}','lang' => 'en'),
      array('id' => '27','key' => 'themeThree','value' => '{"hero":{"top_title":"#1 Online Marketplace","title":"Find the talents for any job.","subtitle":"Unlock your potential with quality job & earn from world leading brands & co.","btn_text":"Post a Job","btn_link":"\\/register","image":null,"image4":null,"image1":"\\/uploads\\/24\\/01\\/OGZAKU0eo6CHo2mqFT2S.png","image2":"\\/uploads\\/24\\/01\\/TdyR8PZjnZNqleMt7Jza.png","image3":"\\/uploads\\/24\\/01\\/oIRhJc4mzhRGT9NE2Wiq.png","image5":null,"image6":null},"cta_s1":{"top_title":"Why choose us?","title":"World of talent at your fingertips","features":[{"title":"Seamless Search","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customisable page design to reflect your brand."},{"title":"Hire top talents","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customisable page design to reflect your brand."},{"title":"Protected payments, every time","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customisable page design to reflect your brand."}],"btn_text":"Learn More","btn_link":"\\/about-us","image1":"\\/assets\\/images\\/assets\\/screen_09.png","image2":"\\/assets\\/images\\/assets\\/screen_08.png","image":null,"image3":null,"image4":null,"image5":null,"image6":null},"cta_s2":{"top_title":"Business Solution","title":"Get quick Solution for your business.","subtitle":"A full suite of hybrid workforce management tools are yours to use, as well as access to our top 1% of talent.","btn_text":"Explore Jobi business","btn_link":"\\/about-us","image1":"\\/assets\\/images\\/assets\\/img_20.jpg","item1":"30k+","item2":"3%","item3":"7mil","image":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"cta_s3":{"video":"https:\\/\\/www.youtube.com\\/embed\\/fU39_3wrtoc","title":"Let\\u2019s get started It\\u2019s simple.","subtitle":"Get access to our top 1% talent as well as a complete set of hybrid workforce management tools.","image":"\\/assets\\/images\\/assets\\/img_21.jpg","image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null,"footer_item1":"It\\u2019s take 2 minutes to open an account.","footer_item2":"Find talents or search your desire work.","footer_item3":"Get work done quickly with jobi gatweay."},"cta_s4":{"title":"Collaboration with leading Brands.","subtitle":"We collaborate with a number of top tier companies on imagining the future of work, have a look.","btn_text":"Learn More","btn_link":"\\/companies","circle_text1":"100+","circle_text2":"Leading Brands","image1":"\\/assets\\/images\\/logo\\/logo_05.png","image2":"\\/assets\\/images\\/logo\\/media_17.png","image3":"\\/assets\\/images\\/logo\\/media_18.png","image4":"\\/assets\\/images\\/logo\\/media_19.png","image5":"\\/assets\\/images\\/logo\\/media_20.png","image6":"\\/assets\\/images\\/logo\\/media_21.png","image":null},"footer_cats":[{"id":"1","title":"Trending Skills","items":[{"text":"Blockchain","url":"\\/jobs"},{"text":"Node.js","url":"\\/jobs"},{"text":"HR consulting","url":"\\/jobs"},{"text":"Vue.js","url":"\\/jobs"},{"text":"Microsoft Power BI","url":"\\/jobs"},{"text":"React.js","url":"\\/jobs"},{"text":"Videographers","url":"\\/jobs"}]},{"id":"2","title":"Top Skills","items":[{"text":"Full Consultation","url":"\\/jobs"},{"text":"Code Review","url":"\\/jobs"},{"text":"Staff Augmentation","url":"\\/jobs"},{"text":"Support","url":"\\/jobs"},{"text":"Video Editors","url":"\\/jobs"},{"text":"Data Entry Specialists","url":"\\/jobs"},{"text":"Data Analyst","url":"\\/jobs"}]},{"id":"3","title":"Top in USA","items":[{"text":"Technical Support","url":"\\/jobs"},{"text":"Accountants","url":"\\/jobs"},{"text":"Web Designers in US","url":"\\/jobs"},{"text":"Customer identity","url":"\\/jobs"},{"text":"Data Entry","url":"\\/jobs"}]},{"id":"4","title":"Project Catalog","items":[{"text":"Microsites","url":"\\/jobs"},{"text":"Marketing Automation","url":"\\/jobs"},{"text":"SEO & SMM","url":"\\/jobs"},{"text":"Lead Generation","url":"\\/jobs"},{"text":"Article Writing Services","url":"\\/jobs"},{"text":"SEO Services","url":"\\/jobs"},{"text":"Translation Services","url":"\\/jobs"}]}],"feedback_section":{"image":null,"image1":null},"category_section":[]}','lang' => 'en'),
      array('id' => '28','key' => 'themeTwo','value' => '{"hero":{"title":"Find & Hire Top 3% of expert on jobi.","subtitle":"With the largest professional creative community online, simply search through from our website","footer_item1":"18k+","footer_item2":"A+ Rating","footer_item3":"5","footer_item4":"4.78 (300k+)","image":null,"image4":"\\/uploads\\/24\\/01\\/sHcf1GmEBdCxkLtc5My4.png","image5":null,"image6":null,"image1":"\\/uploads\\/24\\/01\\/uRbzm9kEtmhOVqmx0Of9.png","image3":"\\/uploads\\/24\\/01\\/9B1hgJVP5E5p9IQmEn1O.png","image2":"\\/uploads\\/24\\/01\\/K1S9U3dZpXd4nGnqRLs3.png"},"cta_s1":{"title":"Get the job of your dreams quickly.","subtitle":"AInciddnt ut labore et dolor magna aliu. enim ad mim venam, quis nostru","features":"Seamless searching, Protected payments every time, Wide rang of job categories","btn_text":"Learn More","btn_link":"\\/","image1":"\\/assets\\/images\\/assets\\/img_11.jpg","image2":"\\/assets\\/images\\/assets\\/img_12.jpg","image3":"\\/assets\\/images\\/assets\\/img_13.jpg","video":"https:\\/\\/www.youtube.com\\/embed\\/aXFSJTjVjw0","image":null,"image4":null,"image5":null,"image6":null,"item1":"7million","item2":"30k+","item3":"13billion","video_id":"fU39_3wrtoc"},"cta_s2":{"top_title":"FIND FREELANCER","title":"Hire top talents","features":[{"title":"Seamless Search","body":"It only takes 5 minutes. Set-up is smooth and simple, with fully customisable page design to reflect your brand. It only takes 5 minutes."},{"title":"Hire top talents","body":"Practice what you learned on realistic lorem quis test questions testing."}],"btn_text":"Explorer All","btn_link":"\\/faq","image":null,"image3":null,"image4":null,"image5":null,"image6":null,"image1":"\\/uploads\\/24\\/01\\/pkIjBFMZjQ52IBa5mmeJ.png","image2":"\\/uploads\\/24\\/01\\/QZP5oMhpkLXBvCTfb1wf.png"},"cta_s3":{"image":null,"image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"cta_s4":{"image":null,"image1":null,"image2":null,"image3":null,"image4":null,"image5":null,"image6":null},"feedback_section":{"top_title":"TESTIMONIAL","title":"Clients loves jobi.","bottom_title":"A+ Rating","bottom_sub_title":"Avg rating 4.8 makes us best marketplace.","image":null,"image1":null}}','lang' => 'en'),
      array('id' => '29','key' => 'seo_login','value' => '{"site_name":"Sign In","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '30','key' => 'seo_register','value' => '{"site_name":"Sign Up","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '31','key' => 'seo_job_list','value' => '{"site_name":"Jobs","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '32','key' => 'seo_candidate_list','value' => '{"site_name":"Candidates","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '33','key' => 'seo_companies','value' => '{"site_name":"Companies","matatag":"","matadescription":"","preview":""}','lang' => 'en'),
      array('id' => '34','key' => 'per_credit_fee','value' => '1','lang' => 'en'),
      array('id' => '35','key' => 'per_word_credit','value' => '1','lang' => 'en')
    );


    Option::insert($options);
  }
}