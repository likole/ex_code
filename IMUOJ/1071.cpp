#include<iostream>
using namespace std;
int main()
{
	int a[10], sum=0;
	for (int i = 0; i < 10; i++)
	{
		cin>>a[i];
	}
	float avg;
	for (int i = 0; i < 10; i++)
	{
		sum += a[i];
	}
	avg = sum / 10.0;
	int num = 0;
	for (int i = 0; i < 10; i++)
	{
		if (a[i] > avg)num++;
	}
	cout << num << endl;
	//cin.get();
	//cin.get();
	return 0;
}