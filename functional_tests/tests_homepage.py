from django.test import LiveServerTestCase
from selenium import webdriver
import unittest


class NewVisitorTest(LiveServerTestCase):

    def setUp(self):
        self.browser = webdriver.Firefox()
        self.browser.implicitly_wait(3)

    def tearDown(self):
        self.browser.quit()

    def test_can_start_a_homepage(self):
        # User goes to check Moon's homepage
        self.browser.get(self.live_server_url)

        # User notices the page title mentions Jungsoo Moon
        # and header mentions I am Jungsoo Moon
        self.assertIn('Jungsoo Moon', self.browser.title)
        header_text = self.browser.find_element_by_tag_name('h1').text
        self.assertIn('I am Jungsoo Moon', header_text)

        # User can clicks About page

        self.fail('Finish the test!')
