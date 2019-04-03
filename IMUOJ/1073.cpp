#include<iostream>
using namespace std;
int main()
{
	long long int log[1000][2], log_o[3][10];
	int index0 = 0, index1 = 0, index2 = 0,index=0;
	int t;
	while (cin >> t)
	{
		log[index][0] = t;
		cin >> log[index][1];
		index++;
	}
	//ini
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 10; j++)
		{
			log_o[i][j] = 0;
		}
	}
	//main
	for (int i = index-1; i >= 0; i--)
	{
		if (log[i][0] == 0&&index0<10)
		{
			log_o[0][index0] = log[i][1];
			index0++;
		}
		else if (log[i][0] == 1 && index1<10)
		{
			log_o[1][index1] = log[i][1];
			index1++;

		}
		else if(index2<10)
		{
			log_o[2][index2] = log[i][1];
			index2++;
		}
	}
	//output
	for (int i = 0; i < 10; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			cout << log_o[j][i];
			if (j != 2)cout << " ";
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}