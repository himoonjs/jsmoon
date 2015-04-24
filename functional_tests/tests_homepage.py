import sys
from django.contrib.staticfiles.testing import StaticLiveServerTestCase
from selenium import webdriver
import unittest

class NewVisitorTest(StaticLiveServerTestCase):

    @classmethod
    def setUpClass(cls):
        for arg in sys.argv:
            if 'liveserver' in arg:
                cls.server_url = 'http://' + arg.split('=')[1]
                return
        super().setUpClass()
        cls.server_url = cls.live_server_url

    @classmethod
    def tearDownClass(cls):
        if cls.server_url == cls.live_server_url:
            super().tearDownClass()

    def setUp(self):
        self.browser = webdriver.Firefox()
        self.browser.implicitly_wait(3)

    def tearDown(self):
        self.browser.quit()

    def test_can_start_a_homepage(self):
        # User goes to check Moon's homepage
        self.browser.get(self.server_url)

        # User notices the page title mentions Jungsoo Moon
        # and header mentions I am Jungsoo Moon
        self.assertIn('Jungsoo Moon', self.browser.title)

        # User can clicks About page

        # self.fail('Finish the test!')
