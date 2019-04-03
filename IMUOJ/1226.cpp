#include<iostream>
using namespace std;
int main()
{
	int n, rad[100];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> rad[i];
	}
	int output[100], k = 0;
	for (int i = 0; i < n; i++)
	{
		int exist = 0;
		for (int j = 0; j < k; j++)
		{
			if (output[j] == rad[i]) exist = 1;
		}
		if (!exist)
		{
			output[k] = rad[i];
			k++;
		}
	}
	cout << k << endl;
	//Now there have $k elements in array output[];
	for (int j = 0; j < k - 1; j++)
	{
		for (int i = 0; i < k - j - 1; i++)
		{
			if (output[i] > output[i + 1])
			{
				int tmp = output[i];
				output[i] = output[i + 1];
				output[i + 1] = tmp;
			}
		}
	}
	for (int i = 0; i < k; i++)
	{
		cout << output[i];
		if (i != k - 1)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}