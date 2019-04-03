#include<iostream>
using namespace std;
int main()
{
	int m, n;
	while (cin >> m >> n)
	{
		int sumj = 0, sumo = 0;
		for (int i = m; i <=n; i++)
		{
			if (i % 2 == 0)sumj += i*i;
			else sumo += i*i*i;
		}
		cout << sumj << " " << sumo << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}