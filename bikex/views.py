from django.shortcuts import render

def bikex_home_page(request):
    return render(request, 'bikex/bikex_home.html')


def bikex_test_page(request):
    return render(request, 'bikex/bikex_test.html')
