#include<iostream>
using namespace std;
int main()
{
	bool matrix[100][100];
	//length
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		//input matrix
		for (int i = 0; i < n; i++)
		{
			for (int j = 0; j < n; j++)
			{
				cin >> matrix[i][j];
			}
		}
		//process
		//is_even
		int flag1 = 0,flag2=0,y,x;
		for (int i = 0; i < n; i++)
		{
			int sum = 0;
			for (int j = 0; j < n; j++)
			{
				sum += matrix[i][j];
			}
			if (sum % 2 == 1)
			{
				flag1++;
				x = i;
			}
		}
		for (int i = 0; i < n; i++)
		{
			int sum = 0;
			for (int j = 0; j < n; j++)
			{
				sum += matrix[j][i];
			}
			if (sum % 2 == 1)
			{
				flag2++;
				y = i;
			}
		}
		if (flag1 == 0 && flag2 == 0) cout << "OK"<<endl;
		else if (flag1 == 1 && flag2 == 1)cout << "Change bit (" << x+1 << "," << y+1 << ")" << endl;
		else cout << "Corrupt" << endl;
	}
}