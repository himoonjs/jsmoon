from django.shortcuts import render

def catchme_home_page(request):
    return render(request, 'catchme/catchme_home.html')