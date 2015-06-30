from django.conf.urls import patterns, include, url

urlpatterns = patterns('',
    # Examples:
    url(r'^$', 'bikex.views.bikex_home_page', name='bikex_home'),
    url(r'^test/', 'bikex.views.bikex_test_page', name='bikex_test'),
    # url(r'^blog/', include('blog.urls')),
    #url(r'^admin/', include(admin.site.urls)),
)
