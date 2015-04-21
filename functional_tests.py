from selenium import webdriver
import unittest

class NewVisitorTest(unittest.TestCase):

    def setUp(self):
        self.browser = webdriver.Firefox()
        self.browser.implicitly_wait(3)

    def tearDown(self):
        self.browser.quit()

    def test_can_start_a_homepage(self):
        # User goes to check Moon's homepage
        self.browser.get('http://localhost:8000')

        # User notices the page title and header mention Jungsoo Moon
        self.assertIn('Jungsoo Moon', self.browser.title)
        self.fail('Finish the test!')

if __name__ == '__main__':
    unittest.main(warnings='ignore')