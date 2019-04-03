#include<iostream>
using namespace std;
void del_element(int arr[], int);
void add_element(int arr[], int, int);
int main()
{
	int a[10];
	for (int i = 0; i < 10; i++)
	{
		a[i] = i + 1;
	}
	for (int i = 0; i < 2; i++)
	{
		int n;
		cin >> n;
		del_element(a,n);
	}
	for (int i = 0; i < 2; i++)
	{
		int n, data;
		cin >> n >> data;
		add_element(a, n, data);
	}
	for (int i = 0; i < 10; i++)
	{
		cout << a[i];
		if (i != 9)cout << " ";
	}
}
void del_element(int arr[], int x)
{
	for (int i = x; i < 9; i++)
	{
		arr[i] = arr[i + 1];
	}
}
void add_element(int arr[], int x, int data)
{
	for (int i = 10 - 1; i >= x+1; i--)
	{
		arr[i] = arr[i - 1];
	}
	arr[x] = data;
}