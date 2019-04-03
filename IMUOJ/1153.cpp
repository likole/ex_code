#include<iostream>
using namespace std;
int main()
{
	int n;
	int data[100][2];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> data[i][0] >> data[i][1];
	}
	for (int i = 0; i < n; i++)
	{
		int  a_sum=0,b_sum=0;
		for (int j = 1; j < data[i][0]; j++)
		{
			if (data[i][0] %j == 0)a_sum += j;
		}
		for (int j = 1; j < data[i][1]; j++)
		{
			if (data[i][1] %j == 0)b_sum += j;
		}
		if (data[i][0] == b_sum && data[i][1] == a_sum)
			cout << "YES" << endl;
		else
			cout << "NO" << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}