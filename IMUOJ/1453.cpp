#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int  i = 0; i < n; i++)
	{
		int score[101], num, sum = 0, tmp;
		for (int i = 0; i < 101; i++)
		{
			score[i] = 0;
		}
		cin >> num;
		for (int i = 0; i < num; i++)
		{
			cin >> tmp;
			sum += tmp;
			score[tmp]++;
		}
		int sum2 = 0;
		for (int i = (double)sum/num+1; i < 101; i++)
		{
			sum2 += score[i];
		}
		cout << fixed << setprecision(3) << (double)sum2 / num * 100 << "%\n";
	}
}