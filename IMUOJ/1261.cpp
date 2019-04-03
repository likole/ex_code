#include<iostream>
#include<cmath>
#include<algorithm>
using namespace std;
int posX[10001], posY[10001];
int main()
{
	int n, midX, midY, sumX = 0, sumY = 0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> posX[i] >> posY[i];
	}
	sort(posX, posX + n);
	sort(posY, posY + n);
	if (n % 2)
	{
		midX = posX[(n - 1) / 2];
		midY = posY[(n - 1) / 2];
	}
	else
	{
		midX = (posX[(n - 1) / 2] + posX[n / 2]) / 2;
		midY = (posY[(n - 1) / 2] + posX[n / 2]) / 2;
	}
	for (int i = 0; i < n; i++)
	{
		sumX += abs(midX - posX[i]);
		sumY += abs(midY - posY[i]);
	}
	cout << sumX + sumY << endl;
}