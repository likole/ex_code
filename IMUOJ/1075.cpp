#include<iostream>
using namespace std;
int is_sorted(int arr[],int);
int main()
{
	int a[10000];
	int a_length = 0;
	while (cin >> a[a_length]) a_length++;
	if (is_sorted(a, a_length))cout << "YES\n";
	else cout << "NO\n";
}
int is_sorted(int arr[],int arr_length)
{
	int flag = 1;
	for (int i = 0; i < arr_length-1; i++)
	{
		if (arr[i] > arr[i + 1]) flag = 0;
	}
	return flag;
}