#include<iostream>
#include<iomanip>
using namespace std;
float fact(int);
int main()
{
	int n;
	float sum = 0;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		sum +=1.0 / fact(i);
	}
	cout << fixed << setprecision(4) << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}
float fact(int n)
{
	int ans = 1;
	for (int i = 1; i <= n; i++)
	{
		ans *= i;
	}
	return ans;
}