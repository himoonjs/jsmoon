from django.shortcuts import render
from django.http import HttpResponse


def home_page(request):
    return render(request, 'homepage/home.html')


def about_page(request):
    return render(request, 'homepage/about.html')
