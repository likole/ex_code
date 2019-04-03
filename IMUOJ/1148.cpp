#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int m;
	double t = 1;
	cin >> m;
	for (int i = 2; i <= m; i++)
	{
		t -= (double)1 / (i*i);
	}
	cout << fixed << setprecision(6) << t << endl;
	//cin.get();
	//cin.get();
	return 0;
}