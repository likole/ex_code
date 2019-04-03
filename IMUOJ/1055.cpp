#include<iostream>
using namespace std;
void input(int arr[10]);
void process_max(int arr[10]);
void process_min(int arr[10]);
void output(int arr[10]);
int main()
{
	int arr[10];
	input(arr);
	process_min(arr);
	process_max(arr);
	output(arr);
	//cin.get();cin.get();
	return 0;
}
void input(int arr[10])
{
	for (int i = 0; i < 10; i++)
	{
		cin >> arr[i];
	}
}
void process_max(int arr[10])
{
	int M=0;
	for (int i = 0; i < 10; i++)
	{
		if (arr[i] > arr[M])M = i;
	}
	if (M != 9)
	{
		int tmp = arr[M];
		arr[M] = arr[9];
		arr[9] = tmp;
	}
}
void process_min(int arr[10])
{
	int m = 0;
	for (int i = 0; i < 10; i++)
	{
		if (arr[i] < arr[m])m = i;
	}
	if (m != 0)
	{
		int tmp = arr[m];
		arr[m] = arr[0];
		arr[0] = tmp;
	}
}
void output(int arr[10])
{
	for (int i = 0; i < 10; i++)
	{
		cout << arr[i] << " ";
	}
}