from django.conf.urls import patterns, include, url
from django.contrib import admin

urlpatterns = patterns('',
    # Examples:
    url(r'^$', 'homepage.views.home_page', name='home'),
    url(r'^about/', 'homepage.views.about_page', name='about'),
    url(r'^buttons/', 'buttons.views.buttons_home_page', name='buttons_home'),
    url(r'^parallax/', 'parallax.views.parallax_home_page', name='parallax_home'),
    url(r'^catchme/', 'catchme.views.catchme_home_page', name='catchme_home'),
    url(r'^koreahouse/', include('koreahouse.urls')),
    url(r'^d3/', include('d3.urls')),
    url(r'^lettertolamia/', 'homepage.views.lettertolamia_page', name='lettertolamia'),
    url(r'^lettertofraktio/', 'homepage.views.lettertofraktio_page', name='lettertofraktio'),
    url(r'^lettertoanders/', 'homepage.views.lettertoanders_page', name='lettertoanders'),
    url(r'^lettertosolidangle/', 'homepage.views.lettertosolidangle_page', name='lettertosolidangle'),
    url(r'^lettertogreatapes/', 'homepage.views.lettertogreatapes_page', name='lettertogreatapes'),
    url(r'^lettertocontrast/', 'homepage.views.lettertocontrast_page', name='lettertocontrast'),
    url(r'^lettertoreaktor/', 'homepage.views.lettertoreaktor_page', name='lettertoreaktor'),
    url(r'^lettertoisobar/', 'homepage.views.lettertoisobar_page', name='lettertoisobar'),
    url(r'^lettertofuturice/', 'homepage.views.lettertofuturice_page', name='lettertofuturice'),
    url(r'^lettertokorpimedia/', 'homepage.views.lettertokorpimedia_page', name='lettertokorpimedia'),
    url(r'^lettertoluotta/', 'homepage.views.lettertoluotta_page', name='lettertoluotta'),
    url(r'^lettertosc5/', 'homepage.views.lettertosc5_page', name='lettertosc5'),
    url(r'^lettertodescom/', 'homepage.views.lettertodescom_page', name='lettertodescom'),
    url(r'^lettertowunderdog/', 'homepage.views.lettertowunderdog_page', name='lettertowunderdog'),
    # url(r'^blog/', include('blog.urls')),
    #url(r'^admin/', include(admin.site.urls)),
)
