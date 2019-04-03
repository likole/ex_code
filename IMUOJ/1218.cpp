#include<iostream>
using namespace std;
int main()
{
	int m, n,num[100];
	while (cin >> n >> m)
	{
		if (m == 0&&n==0) break;
		for (int i = 0; i < n; i++)
		{
			cin >> num[i];
		}
		num[n]=m;
		for (int i = 0; i < n; i++)
		{
			int k = i;
			for (int j = i+1; j < n+1; j++)
			{
				if (num[j] < num[k]) k = j;
			}
			if (k != i)
			{
				int tmp = num[k];
				num[k] = num[i];
				num[i] = tmp;
			}
		}
		for (int i = 0; i < n+1; i++)
		{
			cout << num[i];
			if (i != n)cout << " ";
		}
		cout << endl;
	}
	return 0;
}