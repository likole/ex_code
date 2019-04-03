#include<iostream>
#include<iomanip>
using namespace std;
void sort(int arr[],int leng);
int main()
{
	int x,n[100];
	while (cin >> x)
	{
		for (int i = 0; i < x; i++)
		{
			cin >> n[i];
		}
		sort(n, x);
		float sum=0;
		for (int i = 1; i < x-1; i++)
		{
			sum+=n[i];
		}
		cout << fixed<<setprecision(2)<<(sum / (x - 2) )<< endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}
void sort(int arr[], int leng)
{
	for (int i = 0; i < leng-1; i++)
	{
		for (int j = 0; j < leng-1-i; j++)
		{
			if (arr[j] > arr[j + 1])
			{
				int tmp = arr[j];
				arr[j] = arr[j + 1];
				arr[j + 1] = tmp;
			}
		}
	}
}