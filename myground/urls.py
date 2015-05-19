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
    # url(r'^blog/', include('blog.urls')),
    #url(r'^admin/', include(admin.site.urls)),
)
